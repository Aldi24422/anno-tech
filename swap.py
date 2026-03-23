import sys

file_path = r'r:\Projects\anno-tech\resources\views\pages\home.blade.php'
with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# 1. Swap About and Showcase
about_start = content.find('    <!-- SECTION ABOUT US -->')
about_end = content.find('    <!-- SECTION SHOWCASE -->')
showcase_start = about_end
showcase_end = content.find('    <!-- SECTION WORKFLOW -->')

if about_start != -1 and showcase_start != -1 and showcase_end != -1:
    about_text = content[about_start:about_end]
    showcase_text = content[showcase_start:showcase_end]
    content = content[:about_start] + showcase_text + about_text + content[showcase_end:]
    print("Swapped sections.")
else:
    print("Error swapping sections")

# 2. Swap Services
s1_start = content.find('                <!-- Service 1: Academic & Skripsi -->')
s2_start = content.find('                <!-- Service 2: Web-Apps Dev -->')
s3_start = content.find('                <!-- Service 3: Web-Profile -->')

if s1_start != -1 and s2_start != -1 and s3_start != -1:
    service1 = content[s1_start:s2_start]
    service2 = content[s2_start:s3_start]
    
    content = content[:s1_start] + service2 + service1 + content[s3_start:]
    print("Swapped services.")
else:
    print("Error swapping services")

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
