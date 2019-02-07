//Regels die beginnen met // worden door het programma genegeerd. Dit kun je gebruiken om text in je code te zetten om het uit te leggen.

void setup()
{
	//Code die in setup() staat, wordt 1 keer uitgevoerd.
	
	//Zet pin 13 op output, oftewel dat er stroom uit kan komen.
	pinMode(13,OUTPUT);
}

void loop()
{
	//Code die in loop() staat, wordt telkens opnieuw uitgevoerd.
	
	//Zet het ledje verbonden met pin 13 aan. HIGH betekent aan, LOW betekent uit.
	digitalWrite(13,HIGH);
	
	//doe 1000 milliseconden (1 seconde) niks
	delay(1000);
	
	//Zet pin 13 uit
	digitalWrite(13,LOW);
	
	//Wacht weer een seconde
	delay(1000);
	
	//Hierna gaat ie weer naar het begin van loop, dus het ledje gaat weer aan.
}