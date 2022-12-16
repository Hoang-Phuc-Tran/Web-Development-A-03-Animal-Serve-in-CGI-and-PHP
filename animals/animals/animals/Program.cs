// Filename:	Programs.cs
// Author:		Caine Phung
// Date:		Oct 11, 2022
// Description:	CGI.


using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.IO;
using System.Security.Policy;
using System.Drawing;
using System.Diagnostics;
using System.Net.NetworkInformation;
using System.Drawing.Imaging;
using System.Web;
namespace animals
{
    internal class Program
    {

        static void Main(string[] args)
        {

            Console.WriteLine("Content-type:text/html\r\n\r\n");
            Console.WriteLine("<html><head><title>fdasf</title></head>\n");
            Console.WriteLine("<body>\n");

            //parsing inputs
            string value = Environment.GetEnvironmentVariable("QUERY_STRING");
            string[] parts = value.Split(new char[] { '=', '&' });

            //Replace '+' with a blank space if more than 1 word
            Console.WriteLine("Hello, " + parts[1].Replace('+', '\n') + "!");
            Console.WriteLine("\n");

            // animal name parse
            string animalChoice = parts[3];
            string textPath = @"./theZoo/" + animalChoice +".txt";
 
            // This text is added only once to the file.
            if (File.Exists(textPath))
            {

                //read each line of the files
                string[] readText = File.ReadAllLines(textPath);
              
                foreach (string s in readText)
                {
                    Console.WriteLine(s);           
                }
            }
        }
    }
}


    


