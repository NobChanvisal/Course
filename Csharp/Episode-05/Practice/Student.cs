using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Practice
{
    public class Student
    {
        public int Id;
        public string Name;
        public int Age;
        public double Score;
        public double Html;
        public double Css;

        // Constructor
        public Student(int id, string name, int age)
        {
            Id = id;
            Name = name;
            Age = age;
            // Default: No score yet
            Html = -1;
            Css = -1;

            Score = -1; 
        }

        // Method to add/update score
        public void AddScore(double newHtml , double newCss)
        {

            Html = newHtml;
            Css = newCss;
            Score = newHtml + newCss;
            Console.WriteLine($"Score updated for {Name}.\n");
        }
        // Update Data
        public void UpdateInformation(int id, string name, int age)
        {
            Id = id;
            Name = name;
            Age = age;
            Console.WriteLine($"Data updated for {Id}.\n");
        }
        

        // Display student details
        public void ShowDetails()
        {
            //string scoreText = (Score == -1) ? "Null " : Score.ToString();
            Console.WriteLine($"ID: {Id}");
            Console.WriteLine($"Name : {Name}");
            Console.WriteLine($"Age  : {Age}");
            if (Html > 0) Console.WriteLine($"Html : {Html}");
            else Console.WriteLine("Html : Null");
            if (Css > 0) Console.WriteLine($"Css  : {Css}");
            else Console.WriteLine("Css  : Null");
            if (Score > 0) Console.WriteLine($"Score : {Score}");
            else Console.WriteLine("Score : Null");
        }
    }
}
