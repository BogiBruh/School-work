using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace logovanje1
{
    public partial class Form2 : Form
    {
        Form1 GlavnaForma;

        public Form2(Form1 test)
        {
            InitializeComponent();
            label1.Text = "Email";
            label2.Text = "Korisnicko ime";
            label3.Text = "Lozinka";
            label4.Text = "Potvrdi lozinku";
            label5.Text = "";
            textBox3.PasswordChar = '*';
            textBox4.PasswordChar = '*';
            button1.Text = "Login";
            GlavnaForma = test;
        }

        public void wait(int milliseconds) //iskopirano sa StackOverflow jer nisam znao kako da saceka par sekundi pre zatvaranja
        {
            Timer timer1 = new Timer();
            if (milliseconds == 0 || milliseconds < 0) return;

            // Console.WriteLine("start wait timer");
            timer1.Interval = milliseconds;
            timer1.Enabled = true;
            timer1.Start();

            timer1.Tick += (s, e) =>
            {
                timer1.Enabled = false;
                timer1.Stop();
                // Console.WriteLine("stop wait timer");
            };

            while (timer1.Enabled)
            {
                Application.DoEvents();
            }
        }

        private void button1_Click(object sender, EventArgs e)
        {
            string tacanImejl = "realanimejl@yahoo.fr", tacanUsername = "PravaOsoba13", tacnaLozinka = "LozinkaZaPravuSrbskuZastitu", imejl = textBox1.Text, username=textBox2.Text, lozinka=textBox3.Text, ponovljenalozinka = textBox4.Text;

            if(imejl == tacanImejl && username == tacanUsername && lozinka == tacnaLozinka && ponovljenalozinka == tacnaLozinka)
            {
                textBox1.BackColor = Color.FromArgb(125, 255, 122) // Color.Green;
                textBox2.BackColor = Color.FromArgb(125, 255, 122);
                textBox3.BackColor = Color.FromArgb(125, 255, 122);
                textBox4.BackColor = Color.FromArgb(125, 255, 122);
                label5.ForeColor = Color.Green;
                label5.Text = "Login Uspesan :)";
                GlavnaForma.UspesanLogin();
                wait(3000);
                this.Close();
            }
            else
            {
                label5.ForeColor = Color.Red;
                label5.Text = "Pogresan unos :(";
            }
        }
    }
}
