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
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
            button1.Text = "Login";
            label2.Text = "Nazalost, zbog sprecenosti sa"+ Environment.NewLine + "budzetom ovo je jedino sto je" + Environment.NewLine +" uradjeno u vezi aplikacije.";
        }
        
        private void button1_Click(object sender, EventArgs e)
        {
            Form2 loginscreen = new Form2(this);

            loginscreen.ShowDialog();
        }

        public void UspesanLogin()
        {
            label2.Visible = true;
            label1.Visible = false;
            button1.Visible = false;
        }
    }
}
