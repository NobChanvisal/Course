using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Practice
{
    public class Person
    {
        // Properties (Fields)
        public string Name;
        public int Age;

        public Person()
        {
            Name = "Null";
            Age = 0;
        }
        //Constructor with parameter
        public Person(string name, int age)
        {
            Name = name;
            Age = age;
        }
        public void Insert()
        {
            Console.Write("enter name : ");
            Name = Console.ReadLine();
            Console.Write("enter age : ");
            Age = int.Parse(Console.ReadLine());
        }
        // Method
        public void Introduce()
        {
            Console.WriteLine($"name is {Name}\n Age is {Age} years old.");
        }
    }
}
