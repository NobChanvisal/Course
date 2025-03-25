using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Practice
{
    public class School
    {
        private Student[] students = new Student[100]; // Maximum 100 students
        private int studentCount = 0;

        // Method to register a new student
        public void RegisterStudent()
        {
            Console.Write("Enter Student ID: ");
            int id = int.Parse(Console.ReadLine());

            Console.Write("Enter Student Name: ");
            string name = Console.ReadLine();

            Console.Write("Enter Age: ");
            int age = int.Parse(Console.ReadLine());

            

            students[studentCount] = new Student(id, name, age);
            studentCount++;

            Console.WriteLine("Student registered successfully!\n");
        }

        // Method to add score for a student
        public void AddScore()
        {
            Console.Write("Enter Student ID: ");
            int id = int.Parse(Console.ReadLine());

            for (int i = 0; i < studentCount; i++)
            {
                if (students[i].Id == id)
                {
                    Console.Write("Enter Html score : ");
                    double html = double.Parse(Console.ReadLine());
                    Console.Write("Enter Css score  : ");
                    double css = double.Parse(Console.ReadLine());

                    students[i].AddScore(html,css);
                    return;
                }
            }
            Console.WriteLine("Student not found!\n");
        }

        // Method to display all students
        public void ShowAllStudents()
        {
            if (studentCount == 0)
            {
                Console.WriteLine("No students registered yet.\n");
                return;
            }

            Console.WriteLine("\n--- Student List ---");
            for (int i = 0; i < studentCount; i++)
            {
                students[i].ShowDetails();
            }
            Console.WriteLine();
        }
        public void SearchStudent()
        {
            Console.WriteLine("\n--- Search Student ---");

            Console.Write("Enter Student ID: ");
            int id = int.Parse(Console.ReadLine());

            for (int i = 0; i < studentCount; i++)
            {
                if (students[i].Id == id)
                {
                    students[i].ShowDetails();
                    return;
                }   
            }
            Console.WriteLine("Student not found!\n");
        }
        public void UpdateStudent()
        {
            Console.WriteLine("\n--- Update Student ---");

            Console.Write("Enter Student ID: ");
            int id = int.Parse(Console.ReadLine());

            for (int i = 0; i < studentCount; i++)
            {
                if (students[i].Id == id)
                {
                    Console.Write("enter new id : ");
                    int newid = int.Parse(Console.ReadLine());
                    Console.Write("enter new name : ");
                    string newName = Console.ReadLine();
                    Console.Write("enter new age  : ");
                    int newAge = int.Parse(Console.ReadLine());
                    students[i].UpdateInformation(newid, newName, newAge);
                    return;
                }
            }
            Console.WriteLine("Student not found!\n");
        }
    }
}
