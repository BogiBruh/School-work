package a12092021;

public abstract class mnogougao implements  Drawable{
    public float a;

    public abstract float izracunajObim();
    public abstract float izracunajPovrsinu();

    public mnogougao(float a){
        this.a= a;
    }
}
