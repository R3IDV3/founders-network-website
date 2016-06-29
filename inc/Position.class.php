<?php
    
    include "Question.class.php";
    
    class Position {

		function __construct($portfolio, $title, $details) {
			
			$this->portfolio = $portfolio;
			$this->title = $title;
			$this->description = $details[0];
			//$this->questions = $details[1];
				
			if (array_key_exists(1, $details)) {
    			$this->numPos = $details[1];
			} else {
    			$this->numPos = 1;
			}
			
			$this->echoPosition();
		}
		
		private function titleToId($title) {
			$id = str_replace(" ", "-", strtolower($title));
			return $id;
		}
		
		private function echoPosition() {
			$id = $this->titleToId($this->title);
			$numPosHTML = ($this->numPos > 1 ? '<span class="small-caps"><span class="char">(' . strval($this->numPos) . '</span> positions<span class="char">)</span></span>' : '<span class="small-caps"><span class="char">(1</span> position<span class="char">)</span></span>');
			echo '<input type="checkbox" name="' . $this->portfolio . '-positions[]" id="' . $id . '" value="' . $id . '"><label for="' . $id . '"> ' . $this->title . ' ' . $numPosHTML . '</label><span class="small-caps pos-desc-toggle" data-desc="' . $id . '">Learn More</span><br><p class="pos-desc-content" data-desc="' . $id . '">' . $this->description . '</p>';
			
            /* 
             * Disabled the ability to add questions for each position
             *
			if (count($this->questions) > 0) {
    			echo '<div id="' . $id . '-qs" class="qs">';
			
    			foreach ($this->questions as $index => $question) {
        			new Question($id, $index, $question);
    			}
    			
    			echo '</div>';
            }
             *
             */
		}
	}