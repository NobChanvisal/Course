using System;
using System.Collections.Generic;
using System.Linq;
using System.Runtime.InteropServices.ComTypes;
using System.Text;
using System.Threading.Tasks;
using System.Xml.Linq;

namespace Lists
{
    internal class Program
    {
        static void lesson()
        {
            // list containing integer values 
            List<int> number = new List<int>() { 1, 2, 3 };
            // create a list named subjects that contain 2 elements 
            List<string> subjects = new List<string>() { "English", "Math" };

            Console.WriteLine("this is subjects list : ");
            for (int i = 0; i < subjects.Count; i++)
            {
                Console.WriteLine(subjects[i]);
            }
            //add new item to list
            Console.Write("enter subject to add : ");
            string newSubject = Console.ReadLine();
            subjects.Add(newSubject);

            //update item value in list:
            Console.Write("enter subject to update : ");
            string updateSubject = Console.ReadLine();
            for (int i = 0; i< subjects.Count; i++)
            {
                if (subjects[i] == updateSubject)
                {
                    Console.Write("enter subject to update : ");
                    string neSubject = Console.ReadLine();
                    subjects[i] = neSubject;
                }
            }

            //delete item at list
            Console.Write("enter subject to remove : ");
            string deleteSubject = Console.ReadLine();
            subjects.Remove(deleteSubject);

            //after
            Console.WriteLine("this is subjects list after : ");
            for (int i = 0; i < subjects.Count; i++)
            {
                Console.WriteLine(subjects[i]);
            }
        }
        
        static void studentManage()
        {
            int opt;
            List<int> ids = new List<int>();
            List<string> names = new List<string>();
            List<string> genders = new List<string>();
            List<double> scores = new List<double>();

            do
            {
                Console.WriteLine("\nOption ");
                Console.WriteLine("-------------------------");
                Console.WriteLine("1.Insert\n2.View\n3.Search\n4.Update\n5.Delete");
                Console.Write("enter option : ");
                opt = int.Parse(Console.ReadLine());
                switch(opt)
                {
                    case 1:
                        Console.WriteLine("\nInsert New");
                        Console.WriteLine("-------------------");
                        Console.Write("Enter ID: ");
                        int newId = int.Parse(Console.ReadLine());
                        Console.Write("Enter Name: ");
                        string newName = Console.ReadLine();
                        Console.Write("Enter Gender : ");
                        string newGender = Console.ReadLine();
                        Console.Write("Enter Score: ");
                        double newScore = double.Parse(Console.ReadLine());
                        ids.Add(newId);
                        names.Add(newName);
                        genders.Add(newGender);
                        scores.Add(newScore);
                        break;
                    case 2:

                        Console.WriteLine("\nID".PadRight(10)  + " Name".PadRight(20) + "Gender".PadRight(10) + " Score".PadRight(10));
                        Console.WriteLine("------------------------------------");
                        for (int i = 0; i < ids.Count; i++)
                        {
                            Console.WriteLine(ids[i].ToString().PadRight(10) + names[i].PadRight(20) + genders[i].PadRight(10) + scores[i].ToString().PadRight(10));
                        }
                        break;
                    case 3:
                        break;
                    case 4:
                        break;
                    case 5:
                        break;
                }

            } while (opt != 5);
        }
        static void Main(string[] args)
        {
            //lesson();
            studentManage();
        }
    }
}
