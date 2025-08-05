using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _05_Dictionary
{
    internal class Program
    {
        static void lisson()
        {
            // syntax for create a dictionary
            //Dictionary<dataType1, dataType2> dictionaryName = new Dictionary<dataType1, dataType2>()

            Dictionary<int, string> countries= new Dictionary<int, string>();
            Dictionary<string, string> students = new Dictionary<string, string>();


            students.Add("id", "s001");
            students.Add("name", "Dara");

            countries.Add(5, "Brazil");
            countries.Add(3, "China");
            countries.Add(4, "Usa");


            // print value having key is 3        
            Console.WriteLine("Value having key 3: " + countries[3]);

            //print all value in dictionary :
            Console.WriteLine("All value : ");
            //foreach(var country  in countries) { 
            //    Console.WriteLine(country.Value);
            //}

            foreach(var student in students)
            {
                    Console.WriteLine($"{student.Key} : {student.Value}");
            }

            //change value :
            Console.Write("enter new name : ");
            string newName = Console.ReadLine();
            students["name"] = newName;

            Console.WriteLine("\nAll value after change : ");
            foreach (var student in students)
            {
                Console.WriteLine($"{student.Key} : {student.Value}");
            }
            //delete value with key id;
            students.Remove("id");
            Console.WriteLine("\nAll value after rimove : ");
            foreach (var student in students)
            {
                Console.WriteLine($"{student.Key} : {student.Value}");
            }

        }
        static void listWithDictionary()
        {
            // Create a List of Dictionaries
            List<Dictionary<string, string>> listOfDictionaries = new List<Dictionary<string, string>>();

            int opt;
            do
            {
                Console.WriteLine("1. Add item \n2. Views item \n3.Exit");
                Console.WriteLine("--------------------------------------");
                Console.Write("enter option : ");

                opt = int.Parse(Console.ReadLine());
                switch(opt)
                {
                    case 1:
                        

                        Console.Write("enter name : ");
                        string names = Console.ReadLine();
                        Console.Write("enter age : ");
                        int age = int.Parse(Console.ReadLine());
                        Console.Write("enter address : ");
                        string addr = Console.ReadLine();
                        Dictionary<string, string> items = new Dictionary<string, string>
                        {
                            {"Name", names },
                            {"Age", age.ToString()},
                            {"Address", addr }

                        };
                        listOfDictionaries.Add(items);
                        break;
                    case 2:
                        // Accessing and printing the data
                        foreach (var dict in listOfDictionaries)
                        {
                            foreach (var item in dict)
                            {
                                Console.WriteLine($"{item.Key} : {item.Value}");
                            }
                            Console.WriteLine();
                        }
                        break;
                    case 3:
                        break;
                    default:
                        Console.WriteLine("No option !!");
                        break;
                }
            } while (opt != 3);

        }
        static void Main(string[] args)
        {
            //lisson();
            listWithDictionary();
        }
    }
}
