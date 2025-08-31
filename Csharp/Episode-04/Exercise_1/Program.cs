using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercise_1
{
    internal class Program
    {
        static void Main(string[] args)
        {
            try
            {
                Console.WriteLine("Enter student name:");
                string studentName = Console.ReadLine();

                Console.WriteLine("Enter assignment score (0-100):");
                double assignmentScore = Convert.ToDouble(Console.ReadLine());

                Console.WriteLine("Enter midterm score (0-100):");
                double midtermScore = Convert.ToDouble(Console.ReadLine());

                Console.WriteLine("Enter final exam score (0-100):");
                double finalScore = Convert.ToDouble(Console.ReadLine());

                if (!ValidateScore(assignmentScore) || !ValidateScore(midtermScore) || !ValidateScore(finalScore))
                {
                    Console.WriteLine("Error: All scores must be between 0 and 100.");
                    return;
                }

                double weightedAverage = CalculateWeightedAverage(assignmentScore, midtermScore, finalScore);
                string letterGrade = GetLetterGrade(weightedAverage);

                Console.WriteLine($"\nStudent: {studentName}");
                Console.WriteLine($"Weighted Average: {weightedAverage:F2}");
                Console.WriteLine($"Letter Grade: {letterGrade}");
            }
            catch (FormatException)
            {
                Console.WriteLine("Error: Please enter valid numeric scores.");
            }
            catch (Exception ex)
            {
                Console.WriteLine($"An unexpected error occurred: {ex.Message}");
            }
        }

        static bool ValidateScore(double score)
        {
            return score >= 0 && score <= 100;
        }

        static double CalculateWeightedAverage(double assignmentScore, double midtermScore, double finalScore)
        {
            return (assignmentScore * 0.4) + (midtermScore * 0.3) + (finalScore * 0.3);
        }

        static string GetLetterGrade(double weightedAverage)
        {
            if (weightedAverage >= 90) return "A";
            else if (weightedAverage >= 80) return "B";
            else if (weightedAverage >= 70) return "C";
            else if (weightedAverage >= 60) return "D";
            else if (weightedAverage >= 50) return "E";
            else return "F";
        }
    }
}

