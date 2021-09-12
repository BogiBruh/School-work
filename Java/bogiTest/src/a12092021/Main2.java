package a12092021;

import java.util.*;

public class Main2 {
    public static void main(String[] args) {
        //lista stek grafovi(preskoceni) heap(preskoceni)

        LinkedList<Integer> ll = new LinkedList(); //imaju funkcije ll.addFirst i addLast
        ArrayList<Integer> al = new ArrayList<>(); //ima samo al.add

        Stack<Integer> stek = new Stack<>();
        stek.push(4);
        stek.push(2);
        stek.push(7);
        stek.push(9);
        stek.push(0);
        stek.push(4);
        stek.push(2);
        stek.pop();
        stek.peek();

        Queue<Integer> kju = new LinkedList<>();
    }
}
