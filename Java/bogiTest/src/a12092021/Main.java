package a12092021;

import java.util.LinkedList;

public class Main {
    public static void main(String[] args) {
        trougao t = new trougao(1);
        System.out.println(t.izracunajObim());
        System.out.println(t.izracunajPovrsinu());
        //////////////////////////////////////////
        System.out.println("///////////////////////////////////////////////");
        //////////////////////////////////////////
        Kvadrat k = new Kvadrat(3);
        System.out.println(k.izracunajObim());
        System.out.println(k.izracunajPovrsinu());
        //////////////////////////////////////////
        System.out.println("///////////////////////////////////////////////");
        //////////////////////////////////////////
        mnogougao[] niz = new mnogougao[2];

        niz[0] = new trougao(6);
        niz[1] = new Kvadrat(5);
        for(int i = 0; i < niz.length; i++){
            System.out.println(niz[i].izracunajObim());
        }
        //////////////////////////////////////////
        System.out.println("///////////////////////////////////////////////");
        //////////////////////////////////////////
        //k.draw();
        //t.draw();
        //////////////////////////////////////////
        System.out.println("///////////////////////////////////////////////");
        //////////////////////////////////////////
        LinkedList<mnogougao> lista = new LinkedList<>();
        //////////////////////////////////////////
        System.out.println("///////////////////////////////////////////////");
        //////////////////////////////////////////
    }

    public static int f(int n){
        if(n==0) return 1;
        if(n<=2) return n;

        return f(n-1)*n;
    }
}
