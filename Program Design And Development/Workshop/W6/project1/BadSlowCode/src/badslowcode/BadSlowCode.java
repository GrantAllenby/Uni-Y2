/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package badslowcode;

import java.util.*;

/**
 *
 * @author Sheep Dalton
 */
public class BadSlowCode {

    static int kSIZE = 100_000;

    //--------------------------------------------------------------------------
    /**
     * This does a lot of string additions. it's so much slower than the others.
     */
    public static String badSlowCode() {
        String it = "hello";
        for (int i = 0; i < (kSIZE / 10); i++) {
            it = it + " world";
        }
        return it;
    }

    /**
     *
     * @return String "hello world world world....world"
     */
    public static String myFasterBadSlowCode() {
        StringBuilder helloWorld = new StringBuilder("Hello");
        for (int i = 0; i < (kSIZE / 10); i++) {
            helloWorld.append("World");
        }
        return helloWorld.toString();
    }

    /**
     * Tests myFasterBadSlowCode makes sure badSlowCode works.
     *
     * @return
     */
    public static boolean testmyFasterBadSlowCode() {
        String myVersion = myFasterBadSlowCode();
        String correctVersion = badSlowCode();
        if (myVersion.equals(correctVersion)) {
            System.out.println(" - myFasterBadSlowCode CORRECT -- ");
            return true;
        } else {
            System.out.println(" - myFasterBadSlowCode DID NOT produce the same results -- ");
            return false;
        }
    }

    //--------------------------------------------------------------------------
    /**
     * *
     * This makes a large array list of Strings "Hello0" "Hello1" "Hello2" ..
     *
     * @return List<String>
     */
    public static List<String> makeArrayListAtEnd() {
        String it = "hello";
        List<String> theArrayVersion = new ArrayList<String>();

        for (int i = 0; i < kSIZE; i++) {
            theArrayVersion.add(it + i);
        }
        return theArrayVersion;
    }

    //--------------------------------------------------------------------------
    /**
     *
     * @return List<String>
     */
    public static List<String> makeArrayListAtFront() {
        String it = "hello";
        ArrayList<String> theArrayVersion = new ArrayList<String>();

        for (int i = 0; i < kSIZE; i++) {
            theArrayVersion.add(0, it + i);
        }
        return theArrayVersion;
    }

    //--------------------------------------------------------------------------
    /**
     * This makes a large array list of Strings "Hello0" "Hello1" "Hello2" ..
     *
     * @return
     */
    public static List<String> makeLinkedListAtEnd() {
        String it = "hello";
        List<String> theArrayVersion = new LinkedList<String>();

        for (int i = 0; i < kSIZE; i++) {
            theArrayVersion.add(it + i);
        }
        return theArrayVersion;
    }

    /**
     * makeLinkedListAtHead.
     *
     * @return List<String>
     */
    //--------------------------------------------------------------------------
    public static List<String> makeLinkedListAtHead() {
        String it = "hello";
        LinkedList<String> theArrayVersion = new LinkedList<String>();

        for (int i = 0; i < kSIZE; i++) {
            theArrayVersion.push(it + i);
        }
        return theArrayVersion;
    }
    //--------------------------------------------------------------------------

    /**
     *
     * @return List<String>
     */
    public static List<String> makeLinkedListAt0() {
        String it = "hello";
        LinkedList<String> listVersion = new LinkedList<String>();

        for (int i = 0; i < kSIZE; i++) {
            listVersion.add(0, it + i);
        }
        return listVersion;
    }

    //--------------------------------------------------------------------------
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        List<String> theArrayVersion = new ArrayList<String>();
        List<String> stuff = new LinkedList<>();

        System.out.printf("Running badSlowCode ");
        badSlowCode();
        System.out.println("Mark array list");
        theArrayVersion = makeArrayListAtEnd();
        System.out.printf(" ArrayList add you got it size \t%d %n", theArrayVersion.size());

        List<String> arListFront = makeArrayListAtFront();
        System.out.printf(" ArrayList in front size \t%d %n", arListFront.size());
        List<String> linked = makeLinkedListAtEnd();
        System.out.printf("Linked list  linked\t %d %n", linked.size());
        linked = makeLinkedListAtHead();
        System.out.printf("linked list at head \t%d %n", linked.size());
        List<String> linked3 = makeLinkedListAt0();
        System.out.printf("linked list at head \t%d %n", linked3.size());
        System.out.printf("Done\n");

        // 3.0 testmyFasterBadSlowCode()  here 
        // 4.0 HashMap<String,String> phonebook  code here 
        HashMap<String, Integer> phoneBook = new HashMap<String, Integer>() {
            {
                put("RockWood", 44000001);
                put("Jenny", 5742);
            }
        };

        System.out.printf("Phone number for %s %s %n", "RockWood",
                phoneBook.get("RockWood"));

        phoneBook.put("Kayla", 1066);
        phoneBook.put("Dave", 1776);
        phoneBook.put("Kyle", 1997);
        phoneBook.put("Arnold", 1990);
        phoneBook.put("Dolf", 54670);
        phoneBook.put("Limmy", 5);
        phoneBook.put("Rebecca", 10000);
        phoneBook.put("Michael", 1664);
        phoneBook.put("Stacy", 50000000);

        for (String who : phoneBook.keySet()) {
            System.out.printf("Phone number for %s %s %n", who,
                    phoneBook.get(who));
        }
        phoneBook.remove("Jenny");

        for (String who : phoneBook.keySet()) {
            System.out.printf("Phone number for %s %s %n", who,
                    phoneBook.get(who));
        }

    }
    //--------------------------------------------------------------------------

}
