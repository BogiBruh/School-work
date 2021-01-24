using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Security.Cryptography;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace mp3
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
            button1.Text = "Dodaj Pesme";
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            panel1.Dock = DockStyle.Top;
            panel1.BackColor = Color.FromArgb(87, 222, 220);
            label1.Text = "Super Kul MP3 Aplikacija";
            label2.Text = "Promeni temu";
        }

        String[] pesme, putanjeDoPesama;

        private void button1_Click(object sender, EventArgs e)
        {
            OpenFileDialog ubaciPesme = new OpenFileDialog(); //da bismo ubacili pesme, ono open file prozor
            ubaciPesme.Multiselect = true; //za multiselekt da se ne ubacuje jedno po jedno

            if (ubaciPesme.ShowDialog() == System.Windows.Forms.DialogResult.OK)
            {
                pesme = ubaciPesme.SafeFileNames;
                putanjeDoPesama = ubaciPesme.FileNames;

                for (int i = 0; i < pesme.Length; i++)
                {
                    listBox1.Items.Add(pesme[i]);
                }
            }
        }

        private void pictureBox1_Click(object sender, EventArgs e)
        { //zatvara super kul mp3 plejer 3000
            this.Close();
        }

        private void listBox1_SelectedIndexChanged(object sender, EventArgs e)
        {
            plejer.URL = putanjeDoPesama[listBox1.SelectedIndex];
        }

        private void Label2_Click(object sender, EventArgs e)
        {
            Form2 dijalogtema = new Form2(this);
            dijalogtema.ShowDialog(); //otvara novi dijalog prozor
        }

        public void PromeniTemuUTamnu()
        {
                panel1.BackColor = Color.FromArgb(75, 0, 173);
                this.BackColor = Color.FromArgb(99, 99, 99);
                label1.ForeColor = Color.White;
                label2.ForeColor = Color.White;
                listBox1.BackColor = Color.FromArgb(135,135,135);
        }
        public void PromeniTemuUDefault()                    //↑ ↓ za menjanje teme, samo promeni backcolor vrednosti(ili front color ako je text)
        {
                panel1.BackColor = Color.FromArgb(87, 222, 220);
                this.BackColor = Color.White;
                label1.ForeColor = Color.Black;
                label2.ForeColor = Color.Black;
                listBox1.BackColor = Color.White;
        }
        public void IznenadnaTema()
        {
                Random pom = new Random();
                int num1 = pom.Next(0, 255), num2 = pom.Next(0,255), num3 = pom.Next(0,255);

                panel1.BackColor = Color.FromArgb(num1, num2, num3);  //posto smo ovde iskoristili ove intove ne mozemo ponovo, bice ista boja svuda
                this.BackColor = Color.FromArgb(pom.Next(0,255), pom.Next(0, 255), pom.Next(0, 255));
                label1.ForeColor = Color.FromArgb(pom.Next(0, 255), pom.Next(0, 255), pom.Next(0, 255));
                label2.ForeColor = Color.FromArgb(pom.Next(0, 255), pom.Next(0, 255), pom.Next(0, 255));
                listBox1.BackColor = Color.FromArgb(pom.Next(0, 255), pom.Next(0, 255), pom.Next(0, 255));
        }
    }
}
