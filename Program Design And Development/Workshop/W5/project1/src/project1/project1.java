package project1;

import java.io.OutputStream;
import java.io.IOException;
import java.io.InputStream;
import java.util.*;
import java.io.*;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author w18013678
 */
public class project1 {

    public static void main(String[] args) {
        //todo
        Database db = new Database();
        CD sheepOnDrugs = new CD("Sheep On Drugs", "Sheep On drugs", 9, 90);
        DVD Something = new DVD("Something", "Something", 90);
        db.addItem(Something);
        db.addItem(sheepOnDrugs);

        System.out.printf("before %s", db.list());

        try {
            FileOutputStream fileOut = new FileOutputStream("CDRack.ser");
            ObjectOutputStream out = new ObjectOutputStream(fileOut);
            out.writeObject(db);
            out.close();
            fileOut.close();
            System.out.printf("Data created in CDRack.ser");
        } catch (IOException i) {
            System.out.printf("Error while persisting the data" + i);
            i.printStackTrace();
        }
        try {
            FileInputStream fileIn = new FileInputStream("CDRack.ser");
            ObjectInputStream in = new ObjectInputStream(fileIn);
            Database dbAgain = (Database) in.readObject();
            System.out.printf("AFTER %s", dbAgain.list());
            in.close();
            fileIn.close();
            }
        catch (Exception e) {
            System.out.printf("Error: " + e);
            e.printStackTrace();
        }

        }
    
    
    
}
