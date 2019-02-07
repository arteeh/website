//Ik heb geen idee wat de opdracht precies is dus ik speel gewoon met de ledjes.

//Dit is een array: een rij aan integers met 1 naam. 
//We maken een array met de pins die we gebruiken bij elke led.
int ledPins[] = { 2,3,4,5,6,7,8,9 };

void setup()
{
	//Een for-loop net als de vorige opdracht, zodat we niet 8 keer voor elk pinnetje pinMode() hoeven in te stellen.
	for(int i = 0; i <= 7; i++)
	{
		//gebruik de i variabele die telkens wordt opgeteld als waarde in de array, van 0 tot 7 (bij arrays begin je te tellen bij 0, en we hebben 8 pins
		pinMode(ledPins[i], OUTPUT);
	}
}

void loop()
{
	
	//Zet ledje 0 t/m 7 (pins 2 t/m 9) om de beurt aan.
	for(int i = 0; i <= 7; i++)
	{
		//Zet het vorige ledje uit
		digitalWrite(ledPins[i], LOW);
		//En de volgende aan
		digitalWrite(ledPins[i+1], HIGH);
		
		//Laat de ledjes zo even staan
		delay(100);
	}
	
	//Doe daarna hetzelfde maar dan van 7 naar 0
	for(int i = 7; i >= 0; i--)
	{
		//Zet het vorige ledje uit
		digitalWrite(ledPins[i+1], LOW);
		//En de volgende aan
		digitalWrite(ledPins[i], HIGH);
		
		
		//Laat de ledjes zo even staan
		delay(100);
	}
	
	delay(500);
	
	//Zet 30 keer een willekeurig ledje aan.
	for(int i = 0; i<30; i++)
	{
		//Zet een willekeurig ledje aan
		int randomGetal = random(8);
		digitalWrite(ledPins[randomGetal], HIGH);
		
		delay(100);
		
		//Zet daarna alle ledjes uit zodat er telkens maar 1 aan staat
		for(int x = 0; x <= 7; x++)
		{
			digitalWrite(ledPins[x], LOW);
		}
	}
	
	delay(500);
}