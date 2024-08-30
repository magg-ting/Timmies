import requests
import csv
import os
from dotenv import load_dotenv
import time

cwd = os.getcwd()
newDir = "map"
if not os.path.exists(newDir):
    os.mkdir(newDir)
    print(f"Created \'{newDir}\' directory in \'{cwd}\'.")
else:
    print(f"\'{newDir}\' directory already exists in \'{cwd}\'.")

os.chdir(newDir)


# Set up search parameters
load_dotenv()
API_KEY = os.getenv('GOOGLE_API_KEY')
if not API_KEY:
    raise ValueError("API key not found. Please set the GOOGLE_API_KEY in your .env file.")

LAT_TORONTO = 43.6532
LONG_TORONTO = -79.3832
radius = 50000 #meters
place_type = 'cafe'
keyword = 'Tim Hortons'


# Create a CSV file to write the data
with open('tim_hortons_locations.csv', mode='w', newline='', encoding='utf-8') as file:
    writer = csv.writer(file)
    writer.writerow(['Name', 'Address', 'Latitude', 'Longitude'])

    # Initialize pagination variables
    next_page_token = None

    # fetch Tim Hortons locations near toronto
    # top 60 results only given the API limitations
    # see https://developers.google.com/maps/documentation/places/web-service/search-nearby#PlaceSearchPaging
    while True:
        if next_page_token:
            # If there's a next_page_token, use it to get the next set of results
            url = f"https://maps.googleapis.com/maps/api/place/nearbysearch/json?pagetoken={next_page_token}&key={API_KEY}"
        else:
            # Initial request
            url = f"https://maps.googleapis.com/maps/api/place/nearbysearch/json?location={LAT_TORONTO},{LONG_TORONTO}&radius={radius}&type={place_type}&keyword={keyword}&key={API_KEY}"

        # Make the request to the API
        response = requests.get(url)
        data = response.json()
        places = data.get('results', [])

        for place in places:
            name = place.get('name')
            address = place.get('vicinity')
            lat = place['geometry']['location']['lat']
            lng = place['geometry']['location']['lng']
            
            writer.writerow([name, address, lat, lng])

        # Check if there's a next page token
        next_page_token = data.get('next_page_token')

        # If there's no next_page_token, break the loop
        if not next_page_token:
            break

        # Wait a few seconds before using the next_page_token
        time.sleep(2)

print('Tim Hortons locations loaded successfully.')
