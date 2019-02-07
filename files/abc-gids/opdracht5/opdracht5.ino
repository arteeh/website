//Variabele die aangeeft of het ledje aan of uit moet.
//1 = aan, 0 = uit.
int ledjeAan = 0;

void setup()
{
	pinMode(2,INPUT);
	pinMode(3,INPUT);
	pinMode(13,OUTPUT);
}

void loop()
{
	//Lees de waarden van de knoppen en zet ze in variabelen
	int knop1Status = digitalRead(2);
	int knop2Status = digitalRead(3);
	
	//Als beide knoppen worden ingedrukt oftewel op LOW staan, zet het ledje uit. && betekent 'en', dus beide moeten kloppen
	if(knop1Status == LOW && knop2Status == LOW)
	{
		ledjeAan = 0;
	}
	
	//als knop 1 wordt ingedrukt OF(||) knop 2 wordt ingedrukt, zet het ledje aan
	else if(knop1Status == LOW || knop2Status == LOW)
	{
		ledjeAan = 1;
	}
	
	//Als niks wordt ingedrukt, zet het ledje uit
	else
	{
		ledjeAan = 0;
	}
	
	//Als ledjeAan 1 is, zet het ledje aan. Als het 0 is, zet het uit.
	if(ledjeAan)
	{
		digitalWrite(13,HIGH);
	}
	else
	{
		digitalWrite(13,LOW);
	}
}