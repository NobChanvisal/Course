using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MethodExercise
{
    internal class Program
    {
        static void maximum(int a, int b)
        {
            int max;
            if(a == b)
            {
                Console.WriteLine("both number are eqauls !!");
                return;
            }    
            else if(a > b)
            {
                max = a;
            }
            else
            {
                max = b;
            }
            Console.WriteLine($"maximum = {max}");
        }
        static void SumArray(int[] array)
        {
            int sum = 0;
            Console.WriteLine("Numbers in the array:");

            for (int i = 0; i < array.Length; i++)
            {
                Console.WriteLine(array[i]);
                sum += array[i]; // More concise way to increment sum
            }

            Console.WriteLine("Sum = " + sum);
        }
        public static int count = 0;
        public static int[] id = new int[100];
        public static string[] name = new string[100];
        public static string[] gender = new string[100];

        public static void InsertStudent()
        {
            if (count >= 100)
            {
                Console.WriteLine("Student limit reached.");
                return;
            }

            Console.Write("Enter ID: ");
            id[count] = int.Parse(Console.ReadLine());

            Console.Write("Enter Name: ");
            name[count] = Console.ReadLine();

            Console.Write("Enter Gender (M/F): ");
            gender[count] = Console.ReadLine().ToUpper(); 
            count++;
        }
        public static void ViewStudent()
        {
            for(int i = 0; i<count; i++)
            {
                Console.WriteLine($"Student {i + 1} : ");
                Console.WriteLine($"\tid = {id[i]}");
                Console.WriteLine($"\tname = {name[i]}");
                Console.WriteLine($"\tgender = {gender[i]}");
            }
        }
        public static void Search()
        {
            bool find = false;
            Console.WriteLine("enter id to search : ");
            int searchid = int.Parse(Console.ReadLine());
            for(int i = 0; i<count; i++)
            {
                if (id[i] == searchid)
                {
                    Console.WriteLine("Search Data : ");
                    Console.WriteLine($"\tid = {id[i]}");
                    Console.WriteLine($"\tname = {name[i]}");
                    Console.WriteLine($"\tgender = {gender[i]}");
                    find = true;
                }
            }
            if (!find)
            {
                Console.WriteLine("Student id not found !!!");
            }
        }
        public static void updateStudent()
        {
            bool find = false;
            Console.WriteLine("Update Data");
            Console.WriteLine("----------------------");
            Console.Write("enter code to search : ");
            int searchid = Convert.ToInt32(Console.ReadLine());
            for (int i = 0; i < count; i++)
            {
                if (id[i] == searchid)
                {
                    Console.WriteLine("enter new data : ");
                    Console.Write("enter code  : ");
                    id[i] = Convert.ToInt32(Console.ReadLine());
                    Console.Write("enter name  : ");
                    name[i] = Console.ReadLine();
                    Console.Write("enter price : ");
                    Console.WriteLine($"\tgender = {gender[i]}");
                    find = true;
                }
            }
            if (find == false)
            {
                Console.WriteLine("Product code not found !!");
            }
            else
            {
                Console.WriteLine("Product code update success !!");
            }
        }
        public static void deleteStudent()
        {
            bool find = false;

            Console.WriteLine("Delete Data");
            Console.WriteLine("----------------------");
            Console.Write("enter code to delete : ");
            int searchid = Convert.ToInt32(Console.ReadLine());
            for (int i = 0; i < count; i++)
            {
                if (id[i] == searchid)
                {
                    for (int j = i; j < count - 1; j++)
                    {
                        id[j] = id[j + 1];
                        name[j] = name[j + 1];
                        gender[j] = gender[j + 1];
                    }
                    count--;
                    find = true;
                }
            }
            if (find == false)
            {
                Console.WriteLine("Product code not found !!");
            }
            else
            {
                Console.WriteLine("Product code delete success !!");
            }
        }
        public static void studentMenu()
        {
            int opt;
            do
            {
            
                Console.WriteLine("\nStudent menu");
                Console.WriteLine("1.Insert\n2.View\n3.Search");
                Console.Write("enter option : ");
                opt = int.Parse(Console.ReadLine());
                switch (opt)
                {
                    case 1:
                        InsertStudent();
                        break;
                    case 2:
                        ViewStudent(); break;
                    case 3:
                        Search(); break;
                    case 4:
                        updateStudent();
                        break;
                    case 5:
                        deleteStudent();    
                        break;
                    case 6:
                        break;
                }
            } while (opt != 4);
        }
        static void Main(string[] args)
        {
            //int[] myarray = { 1, 2, 33, 55, 10 };
            //SumArray(myarray);

            studentMenu();
        }
    }
}
