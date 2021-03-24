import java.util.Scanner;

public class HM2_1 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.println("Podaj wielkosc tablicy");
        int arraySize = scanner.nextInt();

        int[] twoja_tablica = new int[arraySize];
        for( int i =0; i < arraySize; i++)
        {
            System.out.println("Podaj nastepny element listy ");
            twoja_tablica[i] = scanner.nextInt();
        }

        System.out.println("Twoja tablica to : ");
        for(int i = 0; i < arraySize; i++)
        {
            System.out.print(twoja_tablica[i] + " ");
        }
    }
}