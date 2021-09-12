package a12092021;

public class trougao extends mnogougao{
    @Override
    public float izracunajObim() {
        return (3*a);
    }

    @Override
    public float izracunajPovrsinu() {
        return (float)(Math.sqrt(3)/4*a*a);
    }

    @Override
    public void draw() {

    }

    public trougao(float a){
        super(a);
        //super.toString();
    }
}
