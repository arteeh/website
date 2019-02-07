/*
In deze opdracht laten we een RGB ledje branden. 
Je kan het ledje met 3 pins besturen, en elk pin is een bepaalde kleur.


Pin 9:	rood
Pin 10:	groen
Pin 11:	blauw
*/

//Variabelen voor de helderheid van de led. 
//Speel met deze getallen en kijk wat voor kleur er uit komt. 
//Ga niet hoger dan 255!
int roodHelderheid = 0;
int groenHelderheid = 0;
int blauwHelderheid = 0;

void setup()
{
	//Code die in setup() staat, wordt 1 keer uitgevoerd.
	
	//Zet pin 9, 10 en 11 op output, oftewel dat er stroom uit kan komen.
	pinMode(9,OUTPUT);
	pinMode(10,OUTPUT);
	pinMode(11,OUTPUT);
}

void loop()
{
	//Code die in loop() staat, wordt telkens opnieuw uitgevoerd.
	
	//Een for loop gebruik je als je een bepaald stuk code meerdere keren wilt uitvoeren.
	//Hier voer ik de code in de loop 765 keer uit.
	//Dit gebeurt omdat de variabele x begint bij 0(int x = 0), 
	//telkens wordt opgeteld (x++) 
	//totdat hij groter dan of gelijk is aan 765 (x <= 765).
	for(int x = 0; x<=765; x++)
	{
		//een if-statement gebruik je als je een stukje code alleen bij bepaalde situaties wil uitvoeren.
		//Hier heb ik 3 if-statements:
		//de eerste: als x (wat elke keer eentje hoger wordt) minder dan of gelijk is aan 255, voer de code binnen de haakjes uit.
		if(x <= 255)
		{
			roodHelderheid++;
			groenHelderheid = 0;
			blauwHelderheid--;
		}
		else if(x > 255 && x <= 510)
		{
			//Bij een x van boven de 255 en onder de 510 wordt dit stuk uitgevoerd.
			roodHelderheid--;
			groenHelderheid++;
			blauwHelderheid = 0;
		}
		else if(x >= 510)
		{
			roodHelderheid = 0;
			groenHelderheid--;
			blauwHelderheid++;
		}
		
		//Stuur de variabalen met de helderheid naar het ledje.
		//Analog is net als digitalWrite, maar je stuurt in plaats van LOW of HIGH een getal van 0 t/m 255.
		analogWrite(9,roodHelderheid);
		analogWrite(10,groenHelderheid);
		analogWrite(11,blauwHelderheid);
		
		//Laat het lede 2 milliseconden zo staan. Zonder dit gaat ie veel te snel en kun je het niet goed zien.
		delay(2);
	}
	
	//Eind van de loop, begin opnieuw.
}
