package a12092021;

public class Kvadrat extends mnogougao{
    public Kvadrat (float a){
        super(a);
    }

    @Override
    public float izracunajPovrsinu() {
        return (float)(a*a);
    }

    @Override
    public float izracunajObim() {
        return (float)(4*a);
    }

    @Override
    public void draw() {
        for(int i = 0; i < a; i++){
            System.out.print("#");
        }
        for(int i = 0; i < a - 1; i++){
            System.out.println("#");
            for(int j = 0; j < a - 1; j++){
                System.out.print(" ");
            }
            System.out.print("#\n");
        }
        for(int i = 0; i < a; i++){
            System.out.print("#");
        }
    }
}
