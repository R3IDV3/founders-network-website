## Generate Asset List
## Author: Reid Vender
## Version: 1.0

import sys
import os

def main():
	"""
	Write a formatted list of assets in a specified directory to an assets file
	
	:param:	cmd-line item 1: 		the assets file to overwrite and write to
	:param: cmd-line item 2: 		the directory with assets
	:param: cmd-line item 3 onward:	a list of filetypes to include in the assets file from the directory
	
	:return: None
	"""
	
	# open the assets file in write mode
	with open(sys.argv[1], 'w') as assets_file:
		
		assets_file.write('<div id="assets" style="display: none;">\n')
	
		# open a directory
		dir = sys.argv[2]
		
		# store the list of filetypes to generate an assets list for
		filetypes = sys.argv[3:]
		
		for filetype in filetypes:
			for root, dirs, files in os.walk(dir):
				for name in files:
					if name.endswith((filetype)):
						assets_file.write('\t<img src="img/' + name + '">\n')
			
		
		assets_file.write('</div>')
		
		return
	
# execute the main routine
main()