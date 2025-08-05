using System;
using System.Collections.Generic;
using System.Collections.Specialized;
using System.Linq;
using System.Net.NetworkInformation;
using System.Text;
using System.Threading.Tasks;
using System.Xml.Linq;

namespace Jagged_Array
{
    internal class Program
    {
        static void lisson()
        {
            // 1. Declaration and Initialization of a jagged array
            // The outer array has 3 elements (3 rows)
            int[][] jaggedArray = new int[3][];

            // 2. Initialize each inner array with different lengths
            jaggedArray[0] = new int[] { 1, 2, 3, 4 };
            jaggedArray[1] = new int[] { 5, 6 };
            jaggedArray[2] = new int[] { 7, 8, 9 };

            // You can also declare and initialize in one step:
            // int[][] jaggedArray = new int[][]
            // {
            //     new int[] { 1, 2, 3, 4 },
            //     new int[] { 5, 6 },
            //     new int[] { 7, 8, 9 }
            // };

            // 3. Accessing and printing elements
            Console.WriteLine("Printing Jagged Array:");
            for (int i = 0; i < jaggedArray.Length; i++)//jaggedArray.Length - gives the size of jagged array
            {
                Console.Write($"Row {i}: ");
                for (int j = 0; j < jaggedArray[i].Length; j++)//jaggedArray[i].Length - gives the size of elements of the ith array inside the jagged array
                {
                    Console.Write($"{jaggedArray[i][j]} ");
                }
                Console.WriteLine();
            }

            // 4. Accessing a specific element
            Console.WriteLine($"\nElement at jaggedArray[1][1]: {jaggedArray[1][1]}"); // Output: 6

        }
        static void exercise1()
        {
            //    Exercise 1: Declaring and Initializing a Jagged Array
            //    Create a jagged array to store the scores of students in different classes,
            //    where each class has a different number of students.

            //    1. Declare a jagged array to represent scores for 3 classes.
            //    2. Initialize the array with the following data:
            //      - Class 1: 85, 90, 78
            //      - Class 2: 92, 88
            //      - Class 3: 95, 89, 91, 87
            //    4. For each class, compute the average score by summing the elements and dividing by the number of students.
            //    3. Print the scores and average score for each class.

            int[][] classScore = new int[3][];
            classScore[0] = new int[] { 85, 90, 78 };
            classScore[1] = new int[] { 92, 88 };
            classScore[2] = new int[] { 95, 89, 91, 87 };
            for (int i = 0;i < classScore.Length; i++)
            {
                Console.WriteLine($"Class {i+1} : ");
                double sum = 0;
                for (int j = 0;j < classScore[i].Length; j++)
                {
                    Console.WriteLine($"\tscore of student {j + 1} : {classScore[i][j]}");
                    sum += classScore[i][j];
                }
                Console.WriteLine("-------------------------------------------------");
                double average = sum / classScore[i].Length;
                Console.WriteLine($"\tAverage Score: {average:F2}");
                Console.WriteLine() ;
            }
        }
        static void exercise1b()
        {
            Console.Write("enter number of class : ");
            int numclass = int.Parse( Console.ReadLine() );
            int[][] classScore = new int[numclass][];
            for(int i = 0; i < numclass; i++)
            {
                Console.WriteLine($"Class {i + 1} : ");
                Console.Write($"enter number of student at class { i + 1 } : ");
                int students = int.Parse(Console.ReadLine());

                classScore[i] = new int[students];
                for(int j = 0; j < students; j++)
                {
                    Console.Write($"\tenter score { j + 1 } : ");
                    classScore[i][j] = int.Parse(Console.ReadLine());
                }
            }
            for (int i = 0; i < classScore.Length; i++)
            {
                Console.WriteLine("\n=========================================");
                Console.WriteLine($"Class {i + 1} : ");
                double sum = 0;
                for (int j = 0; j < classScore[i].Length; j++)
                {
                    Console.WriteLine($"\tscore of student {j + 1} : {classScore[i][j]}");
                    sum += classScore[i][j];
                }
                Console.WriteLine("-------------------------------------------------");
                double average = sum / classScore[i].Length;
                Console.WriteLine($"\tAverage Score: {average:F2}");
                Console.WriteLine();
            }

        }
        static void exercise2()
        {
            //    Exercise 1: Declaring and Initializing a Jagged Array
            //    Create a jagged array to store the sale_price of products in different day,
            //    where each class has a different number of products.
            //   step : 
            //    1. asking the user to input the number of products
            //    2. created a jagged array (product) with number of products rows,
            //       where each row will store the prices for one product over multiple days
            //    3. asking the user to input the number of days 
            //    4. For each day, the program prompts the user to enter the price
            //    5. For each class, compute the average price by summing the elements and dividing by the number of days.
            //    7. Display Stored Prices and average price
            Console.Write("enter number of products : ");
            int numPro = int.Parse( Console.ReadLine() );

            int[][] products = new int[numPro][];

            for(int i = 0; i < numPro; i++)
            {
                
                Console.WriteLine($"\nProducts{i + 1}");
                Console.WriteLine("-------------------------------");
                Console.Write("Enter number of day for products : ");
                int numDay = int.Parse(Console.ReadLine() );
                Console.WriteLine("-------------------------------");

                products[i] = new int[numDay];
                
                for (int j = 0; j < numDay; j++)
                {
                    Console.Write($"enter price sale at day {j + 1} : ");
                    products[i][j] = int.Parse( Console.ReadLine() ) ;
                }
            }
            //output:
            Console.WriteLine("\nProduct Prices");
            Console.WriteLine("=============================");
            for (int i = 0; i < products.Length; i++)
            {
                Console.WriteLine($"\nProduct {i + 1} Prices: ");
                double sum = 0;
                for (int j = 0; j < products[i].Length; j++)
                {
                    Console.WriteLine($"\tDay{ j + 1} : {products[i][j]}$");
                    sum += products[i][j];
                }
                Console.WriteLine("----------------------------------");
                
                Console.WriteLine($"Total Price   : {sum:F2}$");
            }
            Console.ReadLine();
        }
        static void exercise3()
        {
            //- Jagged Array Declaration: int[][,] classScores creates a jagged array where each element is a 2D array(int[,]).
            //- Multidimensional Array: For each class, a 2D array is initialized with new int[numStudents, 3],
            //  where numStudents is the number of students, and 3 is the fixed number of subjects(HTML, CSS, C#).
            //- Input Validation: The program ensures that:
            //  The number of classes and students is positive.
            //  Scores are integers between 0 and 100.
            //- Accessing Elements: Scores are accessed using classScores[i][j, k],
            //  where i is the class index, j is the student index, and k is the subject index(0 for HTML, 1 for CSS, 2 for C#).
            //- Display: The program iterates through the jagged array and uses GetLength(0)
            //  to get the number of students in each class’s 2D array, then displays the scores.

            int[][,] classScore = new int[3][,];

            Console.Write("enter number of class : ");
            int numberclass = int.Parse( Console.ReadLine() );
            for (int i = 0; i < numberclass; i++)
            {
                Console.WriteLine($"\nclass {i+1} :");
                Console.Write("enter number of student : ");
                int numberStudent = int.Parse( Console.ReadLine() );

                // Initialize the 2D array for the class (rows: students, columns: HTML, CSS, C#)
                classScore[i] = new int[numberStudent,3];
                for (int j = 0; j < numberStudent; j++)
                {
                    Console.WriteLine($"\nstudent {j+1} ");
                    Console.Write("enter Html score : ");
                    classScore[i][j,0] = int.Parse(Console.ReadLine());
                    Console.Write("enter CSS score  : ");
                    classScore[i][j, 1] = int.Parse(Console.ReadLine());
                    Console.Write("enter C# score   : ");
                    classScore[i][j, 2] = int.Parse(Console.ReadLine());
                }
                Console.WriteLine("-----------------------");



            }

            //output
            Console.WriteLine("\nStudent Scores by Class:");
            for (int i = 0; i < classScore.Length; i++)
            {
                Console.WriteLine($"\nClass {i + 1}:");
                Console.WriteLine("-----------------------");
                for (int j = 0; j < classScore[i].GetLength(0); j++)
                {
                    Console.WriteLine($"  Student {j + 1}:");
                    Console.WriteLine($"\tHTML ={classScore[i][j, 0]}");
                    Console.WriteLine($"\tCSS  ={classScore[i][j, 1]}");
                    Console.WriteLine($"\tC#   ={classScore[i][j, 2]}");
                }
            }
        }
        static void Main(string[] args)
        {
            //lisson();
            //exercise1();
            //exercise1b();
              exercise2();
            //exercise3();
        }
    }
}
