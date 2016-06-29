<?php
    
    include "Position.class.php";
	
	class Portfolio {
		
		function __construct($title, $recruiterEmail, $positions, $questions = array(), $description = "") {
			
			$this->title = $title;
			$this->recruiterEmail = $recruiterEmail;
    		$this->positions = $positions;
			$this->questions = $questions;
			$this->description = $description;
			
			$this->echoPortfolio();
		}
		
		private function titleToId($title) {
			$id = str_replace("&", "and", str_replace(" ", "-", strtolower($title)));
			return $id;
		}
		
		private function echoPortfolio() {
			$title = str_replace("&", '<span class="char">&</span>', $this->title);
			$id = $this->titleToId($this->title);
			echo '<fieldset>';
            echo '<legend class="small-caps"><input type="checkbox" name="portfolios[]" value="' . $id . '"> ' . $title . '</legend>';
            echo '<input type="hidden" name="' . $id . '-email" value="' . $this->recruiterEmail . '">';
            echo '<p class="portfolio-desc-content">' . $this->description . '</p>';
            
            echo '<div class="disabled" id="' . $id . '-disable-toggle">';
            foreach ($this->positions as $title => $details) {
                new Position($id, $title, $details);
            }
            
            if (count($this->questions) > 0) {
                $id = $this->titleToId($this->title);
    			echo '<div class="' . $id . '-qs qs">';
			
    			foreach ($this->questions as $index => $question) {
        			new Question($id, $index, $question);
    			}
    			
    			echo '</div>';
            }
            
            echo '</div>';
            echo '</fieldset>';
		}
	}