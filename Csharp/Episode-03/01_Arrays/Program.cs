using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Arrays
{
    internal class Program
    {
        //syntax for declare an array : datatype[] arrayName;
        static void demo()
        {
            //int[] number = new int[5];//the array can store 5 elements. 

            //Note: that we have not provided the size of the array.
            //In this case, the C# automatically specifies the size
            //by counting the number of elements in the array (i.e. 5).
            int[] numbers = { 1, 20, 31, 4, 52 };
            for(int i = 0; i < numbers.Length; i++)
            {
                Console.WriteLine(numbers[i]);
            }
        }
        static void exercise_1()
        {

            Console.Write("Enter number of student : ");
            int count = Convert.ToInt32(Console.ReadLine());
            int[] id = new int[count];
            string[] name = new string[count];
            string[] gender = new string[count];
            double[] math = new double[count];
            double[] khmer = new double[count], physic = new double[count], total = new double[count];
            char[] g = new char[count];
            int countMale = 0;
            int countFemale = 0;

            for (int i = 0;i <count ;i++)
            {
                Console.WriteLine($"student {i+1} : ");
                Console.Write("\tenter id          : ");
                id[i] = Convert.ToInt32(Console.ReadLine());
                Console.Write("\tenter name        : ");
                name[i] = Console.ReadLine();
                Console.Write("\tenter gender[m/f] : ");
                gender[i] = Console.ReadLine();
                Console.Write("\tenter math        : ");
                math[i] = Convert.ToDouble(Console.ReadLine());
                Console.Write("\tenter khmer       : ");
                khmer[i] = Convert.ToDouble(Console.ReadLine());
                Console.Write("\tenter physic      : ");
                physic[i] = Convert.ToDouble(Console.ReadLine());
                total[i] = (math[i] + khmer[i] + physic[i])/3;
                if (total[i] >= 95)
                {
                    g[i] = 'A';
                }
                else if (total[i] > 85)
                {
                    g[i] = 'B';
                }
                else if (total[i] > 75)
                {
                    g[i] = 'C';
                }
                else if (total[i] > 60)
                {
                    g[i] = 'D';
                }
                else if (total[i] > 49)
                {
                    g[i] = 'E';
                }
                else
                {
                    g[i] = 'F';
                }
            }
            Console.WriteLine("\nStudent information");
            Console.WriteLine("----------------------------");
            Console.Write($"{"ID".ToString().PadRight(10)}");
            Console.Write($"{"Name".PadRight(30)}");
            Console.Write($"{"Gender".ToString().PadRight(10)}");
            Console.Write($"{"Total".ToString().PadRight(10)}");
            Console.WriteLine($"{"Grade".ToString().PadRight(10)}");
            Console.WriteLine("----------------------------");

            for (int i = 0; i < count; i++)
            {
               
                Console.Write($"{id[i].ToString().PadRight(10)}");
                Console.Write($"{name[i].PadRight(30)}");
                Console.Write($"{gender[i].ToString().PadRight(10)}");
                Console.Write($"{total[i].ToString("F2").PadRight(10)}");
                Console.WriteLine($"{g[i].ToString().PadRight(10)}");
            }
            for (int i = 0; i < count; i++)
            {
                if (gender[i].ToString().ToLower() == "m")
                {
                    countMale++;
                }
                if (gender[i].ToString().ToLower() == "f")
                {
                    countFemale++;
                }
            }
            Console.WriteLine("----------------------");
            Console.WriteLine($"number of student : {id.Count()}");
            Console.WriteLine($"number of female  : {countFemale}");
            Console.WriteLine($"number of male    : {countMale}");
        }
        static void employee()
        {
            Console.WriteLine("Employee register");
            Console.WriteLine("------------------------");
            Console.Write("Enter number of employees: ");
            int n = int.Parse(Console.ReadLine());

            int[] id = new int[n];
            string[] name = new string[n];
            char[] gender = new char[n];
            float[] salary = new float[n];
            float[] tax = new float[n];
            float[] total = new float[n];
            

            for (int i = 0; i < n; i++)
            {
                Console.WriteLine($"\nEmployee {i + 1}");
                Console.Write("Enter ID: ");
                id[i] = int.Parse(Console.ReadLine());
                Console.Write("Enter Name: ");
                name[i] = Console.ReadLine();
                Console.Write("Enter gender[M/F]: ");
                gender[i] = char.Parse(Console.ReadLine());
                Console.Write("Enter Salary: ");
                salary[i] = float.Parse(Console.ReadLine());

                if (salary[i] > 500)
                    tax[i] = salary[i] * 0.05f;
                else if (salary[i] > 300)
                    tax[i] = salary[i] * 0.04f;
                else if (salary[i] > 250)
                    tax[i] = salary[i] * 0.03f;
                else
                    tax[i] = salary[i] * 0.02f;

                total[i] = salary[i] - tax[i];
            }

            Console.WriteLine("\nOutput Data of Employees:");
            Console.WriteLine("--------------------------");
            Console.Write($"{"ID".ToString().PadRight(10)}");
            Console.Write($"{"Name".ToString().PadRight(30)}");
            Console.Write($"{"Gender".ToString().PadRight(10)}");
            Console.Write($"{"Salary".ToString().PadRight(10)}");
            Console.Write($"{"Tax".ToString().PadRight(10)}");
            Console.WriteLine($"{"Total".ToString().PadRight(10)}");
            Console.WriteLine("--------------------------");
            for (int i = 0; i < n; i++)
            {
 
                Console.Write($"{id[i].ToString().PadRight(10)}");
                Console.Write($"{name[i].ToString().PadRight(30)}");
                Console.Write($"{gender[i].ToString().PadRight(10)}");
                Console.Write($"{salary[i].ToString("F2").PadRight(10)}");
                Console.Write($"{tax[i].ToString("F2").PadRight(10)}");
                Console.WriteLine($"{total[i].ToString("F2").PadRight(10)}");
                Console.WriteLine("--------------------------");
            }
            
            
            
        }
        static void productConsoleManagement()
        {
            int[] code = new int[50];
            string[] name = new string[50];
            double[] price = new double[50];
            int count = 0;
            int searchcode;
            bool find = false;
            int opt;
            Console.WriteLine("Welcome To Product console management system");
            Console.WriteLine("======================================");
            do
            {
                
                Console.Write("Press any key goto menu");
                Console.ReadKey();
                Console.Clear();
                Console.WriteLine("--------------------------------------");
                Console.WriteLine("1.Insert\n2.View\n3.Search\n4.Update\n5.Delete");
                Console.WriteLine("--------------------------------------");
                Console.Write("Enter option[1-5] : ");
                opt = Convert.ToInt32(Console.ReadLine());
                switch (opt)
                {
                    case 1:
                       
                        Console.WriteLine("Insert Product");
                        Console.WriteLine("----------------------");
                        Console.Write("enter code  : ");
                        code[count] = Convert.ToInt32(Console.ReadLine());
                        Console.Write("enter name  : ");
                        name[count] = Console.ReadLine();
                        Console.Write("enter price : ");
                        price[count] = Convert.ToDouble(Console.ReadLine());
                        count++;
                        break;
                    case 2:
                        Console.WriteLine("View data");
                        Console.WriteLine($"{"Code".PadRight(10)}{"Name".PadRight(30)}{"Price".PadRight(10)}");
                        Console.WriteLine("------------------");
                        for (int i = 0; i < count; i++)
                        {
                            
                            Console.Write($"{code[i].ToString().PadRight(10)}");
                            Console.Write($"{name[i].PadRight(30)}");
                            Console.WriteLine($"{price[i].ToString().PadRight(10)}");
                            Console.WriteLine("------------------");
                        }
                        break;
                    case 3:

                        Console.WriteLine("Search Data");
                        Console.WriteLine("----------------------");
                        Console.Write("enter code to search : ");
                        searchcode = Convert.ToInt32(Console.ReadLine());
                        for (int i = 0; i < count; i++)
                        {
                            if (code[i] == searchcode)
                            {
                                Console.WriteLine("Search data : ");
                                Console.WriteLine("------------------");
                                Console.Write($"{code[i].ToString().PadRight(10)}");
                                Console.Write($"{name[i].PadRight(30)}");
                                Console.WriteLine($"{price[i].ToString().PadRight(10)}");
                                find = true;
                            }
                        }
                        if (find == false)
                        {
                            Console.WriteLine("Product code not found !!");
                        }
                        break;
                    case 4:
                        
                        Console.WriteLine("Update Data");
                        Console.WriteLine("----------------------");
                        Console.Write("enter code to search : ");
                        searchcode = Convert.ToInt32(Console.ReadLine());
                        for (int i = 0; i < count; i++)
                        {
                            if (code[i] == searchcode)
                            {
                                Console.WriteLine("enter new data : ");
                                Console.Write("enter code  : ");
                                code[i] = Convert.ToInt32(Console.ReadLine());
                                Console.Write("enter name  : ");
                                name[i] = Console.ReadLine();
                                Console.Write("enter price : ");
                                price[i] = Convert.ToDouble(Console.ReadLine());
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
                        break;
                    case 5:
                        Console.WriteLine("Delete Data");
                        Console.WriteLine("----------------------");
                        Console.Write("enter code to delete : ");
                        searchcode = Convert.ToInt32(Console.ReadLine());
                        for (int i = 0; i < count; i++)
                        {
                            if (code[i] == searchcode)
                            {
                                for(int j = i; j < count -1; j++)
                                {
                                    code[j] = code[j + 1];
                                    name[j] = name[j + 1];
                                    price[j] = price[j + 1];
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
                        break;
                }
            } while (opt != 6);
        }
        static void Main(string[] args)
        {
            //demo();
            //exercise_1();
            employee();
            //productConsoleManagement();
        }
    }
}
