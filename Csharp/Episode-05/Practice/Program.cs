using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Practice
{
    internal class Program
    {
        //static void Main()
        //{
        //    // Creating an object of Person class
        //    Person person1 = new Person("Alice", 25);
        //    person1.Introduce();

        //    // Another object
        //    Person person2 = new Person("Bob", 30);
        //    person2.Introduce();


        //    Person[] allPerson = new Person[20];

        //    Console.WriteLine("Entered Details");
        //    Console.Write("enter number of student : ");
        //    int count = int.Parse(Console.ReadLine());
        //    for (int i = 0; i < count; i++)
        //    {
        //        allPerson[i] = new Person(); // Initialize the object
        //        allPerson[i].Insert();
        //    }

        //    for (int i = 0; i < count; i++)
        //    {
        //        allPerson[i].Introduce();
        //    }

        //}

        static void Main()
        {
            School school = new School();

            while (true)
            {
                Console.WriteLine("\nSchool Management System");
                Console.WriteLine("------------------------------");
                Console.WriteLine("1. Register Student");
                Console.WriteLine("2. Add Score");
                Console.WriteLine("3. Show All Students");
                Console.WriteLine("4. Search By Id");
                Console.WriteLine("5. Update By Id");
                Console.WriteLine("6. Exit");
                Console.Write("Choose an option: ");

                int choice = int.Parse(Console.ReadLine());

                switch (choice)
                {
                    case 1:
                        school.RegisterStudent();
                        break;
                    case 2:
                        school.AddScore();
                        break;
                    case 3:
                        school.ShowAllStudents();
                        break;
                    case 4:
                        school.SearchStudent();
                        break;
                    case 5:
                        school.UpdateStudent();
                        break;
                    case 6:
                        Console.WriteLine("Exiting...");
                        return;

                    default:
                        Console.WriteLine("Invalid choice. Try again.\n");
                        break;
                }
            }
        }
    }
}
