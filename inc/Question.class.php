<?php
	
	class Question {
		
		function __construct($id, $index, $question) {
			
			$this->id = $id;
			$this->index = $index;	
			$this->question = $question;
			
			$this->echoQuestion();
		}
		
		private function echoQuestion() {
			echo '<div class="question"><label for="' . $this->id . '-q' . strval($this->index + 1) . '-textarea">' . $this->question . '</label><br><textarea name="' . $this->id . '-q' . strval($this->index + 1) . '" id="' . $this->id . '-q' . strval($this->index + 1) . '-textarea" placeholder="Explain your answer here..."></textarea><span class="error-message"><em></em></span><input type="hidden" name="' . $this->id . '-q' . strval($this->index + 1) . '-q" value="' . $this->question . '"></div>';
		}
	}