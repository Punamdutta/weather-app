import pyautogui as pg
import time

# Sleep for a shorter period initially
time.sleep(10)

# Add a loop with a delay to avoid overwhelming the system
for i in range(600):
    pg.write("hello sandeep")
    pg.press("enter")
    time.sleep(0.5) # Add a 0.5-second delay between each text
    