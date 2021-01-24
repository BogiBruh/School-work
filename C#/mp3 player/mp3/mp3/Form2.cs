using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace mp3
{
    public partial class Form2 : Form
    {
        Form1 glavnaForma;

        public Form2(Form1 gf)
        {
            InitializeComponent();
            label1.Text = "Izaberi temu:";
            radioButton1.Text = "Default(Svetla)";
            radioButton2.Text = "Tamna tema";
            radioButton3.Text = "Iznenadi me";
            button1.Text = "Odaberi";
            glavnaForma = gf;
        }

        private void button1_Click(object sender, EventArgs e)
        {
            if (radioButton1.Checked)
            {
                glavnaForma.PromeniTemuUDefault();
            }
            else if (radioButton2.Checked)
            {
                glavnaForma.PromeniTemuUTamnu();
            }
            else if (radioButton3.Checked)
            {
                glavnaForma.IznenadnaTema();
            }
            this.Close();
        }
    }
}
