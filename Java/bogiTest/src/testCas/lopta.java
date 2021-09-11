package testCas;

public class lopta {
    public String boja;
    public float precnik;

    public lopta(String boja, float precnik){
        this.boja = boja;
        this.precnik = precnik;
    }

    public float IzracunajZapreminu(){
        return (float) (4f/3f*precnik*Math.PI*precnik*precnik);
    }

    public float IzracunajPovrsinu(){
        return (float)(4*precnik*Math.PI);
    }
}
