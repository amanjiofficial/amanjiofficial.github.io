
#include<Servo.h>
Servo myServo;
float count = 0;
int pos = 90;
int buttonstate=0;
float dist=0;
int flag=0;

int Servofuncopen()
{
  for (pos = 180; pos >= 90; pos -= 1)
  { // goes from 0 degrees to 180 degrees
    // in steps of 1 degree
    myServo.write(pos);              // tell servo to go to position in variable 'pos'
    delay(40);
  }
  return 0;
  // waits 15ms for the servo to reach the position

}
int Servofuncclose()
{
  for (pos = 90; pos <= 180; pos += 1)
  { // goes from 0 degrees to 180 degrees
    // in steps of 1 degree
    myServo.write(pos);              // tell servo to go to position in variable 'pos'
    delay(40);                       // waits 15ms for the servo to reach the position
  }
  return 0;
}

void funccheck(int sensorvalue1)
{
  if (sensorvalue1   >= 100)
  {
    count++;
    //Serial.println("COUNT =");
    //Serial.println(COUNT);
  }

    if (((count) / 1.33) > dist)
    {
      
      //Serial.println("firstinput");

      if(flag==0)

      {
        //Serial.println("nextinput");
          Servofuncopen();
          flag=1;-
          Serial.println("DISTANCE COVERED IS ");
          Serial.println(dist);
          Serial.println("NO OF STEPS ARE");
          Serial.println(count);
      // put your main code here, to run repeatedly:
      }

    




  }
}
void setup()
{
  
  Serial.begin(9600);

  myServo.attach(3);


  delay(14000);
  Servofuncclose();
  delay(10000);
  // put your setup code here, to run once:
  pinMode(3,OUTPUT);
  pinMode(7,INPUT);

}

void loop()
{
  int sensorvalue = analogRead(A0);
  int sensorvalue1 = analogRead(A1);
  
  Serial.println(sensorvalue1);

  //Serial.println(sensorvalue1);



  delay(1000);
  
  if (Serial.available() > 0)
  {
    dist = (float)Serial.read() - 48;
    Serial.print("DISTANCE TO BE TRAVELLED IS ");
    Serial.println(dist);
       
  }

  funccheck(sensorvalue1);
buttonstate=digitalRead(7);


  if(buttonstate==HIGH)
  
  {
    digitalWrite(3,HIGH);
    Serial.println("EMERGENCY BUTTON WAS PUSHED");
    Servofuncopen();
  }
  else
  {
    digitalWrite(3,LOW);
  }
}


