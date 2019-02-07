/*
In deze opdracht laten we het ledje knipperen op de snelheid die de potentiometer doorgeeft. 
Als je hem helemaal naar links draait, zal het ledje sneller knipperen. 
Als je het helemaal naar rechts draait, zal het ledje langzaam knipperen.
*/

//Dit is een variabele. We zetten hier het getal in die de potentiometer teruggeeft. dit kan tussen 0 en ong. 1000 zitten.
int sensorValue;

void setup()
{
	//Code die in setup() staat, wordt 1 keer uitgevoerd.
	
	//Zet pin 13 op output, oftewel dat er stroom uit kan komen.
	pinMode(13,OUTPUT);
	
	//Uit pin A0 kunnen we de waarde van de potentiometer lezen. We zetten hem op input omdat we stroom binnenkrijgen.
	pinMode(A0,INPUT);
}

void loop()
{
	//Code die in loop() staat, wordt telkens opnieuw uitgevoerd.
	
	//Kijk waar de potentiometer op staat en zet het in de sensorValue variabele.
	sensorValue = analogRead(A0);
	
	//Zet het ledje verbonden met pin 13 aan. HIGH betekent aan, LOW betekent uit.
	digitalWrite(13,HIGH);
	
	//Wacht een x aantal milliseconden. dit kan 0 tot ~1000 zijn.
	delay(sensorValue);
	
	//Zet pin 13 uit
	digitalWrite(13,LOW);
	
	//Wacht nog een keer
	delay(sensorValue);
}