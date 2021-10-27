<?php

declare(strict_types=1);
	class Teiler extends IPSModule
	{
		public function Create()
		{
			//Never delete this line!
			parent::Create();
		}

		public function Destroy()
		{
			//Never delete this line!
			parent::Destroy();
		}

		public function ApplyChanges()
		{
			//Never delete this line!
			parent::ApplyChanges();
		}

		public function Divide(float $Divisor, float $Dividend) {
			if ($Dividend === 0) {
				// Special handling for dividend = 0
				echo 'Division by zero is not possible';
				return 0;
			}
			return $Divisor / $Dividend;
		}

		public function Multiply(float $Factor1, float $Factor2) {
			// Multiply the factors
			return $Factor1 * $Factor2;
		}
	}
