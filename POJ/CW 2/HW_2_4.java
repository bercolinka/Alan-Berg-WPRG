import javafx.scene.transform.Scale;

import java.util.Scanner;

public  class HW_2_4 {
     public static int[] createArray()
     {
         Scanner scanner = new Scanner(System.in);
         System.out.println("Podaj dlogosc listy");
         int size = scanner.nextInt();

         int[] array = new int[size];
         for(int i =0; i< size; i++)
         {
             System.out.println("Podaj element listy");
             array[i] = scanner.nextInt();

         }
         return array;
     }

     public static void sumPositiveNum(int[] array)
     {
         int sum = 0;
         for ( int number : array) {
             if( number > 0){
                 sum += number;
             }
         }
         System.out.println("Suma dodatnich liczb tablicy wynosi : "+ sum);
     }

    public static void main(String[] args) {
        int[] tab = createArray();
        sumPositiveNum(tab);

    }
}
