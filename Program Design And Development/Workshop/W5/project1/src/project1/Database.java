package project1;

import java.io.Serializable;
import java.util.ArrayList;
import java.util.Iterator;

/**
 * The database class provides a facility to store CD and video 
 * objects. A list of all CDs and DVDs can be printed to the
 * terminal.
 * 
 * This version does not save the data to disk, and it does not
 * provide any search functions.
 * 
 * @author Michael Kolling and David J. Barnes
 * @version 2002-05-04
 */
public class Database implements Serializable
{
    private ArrayList<Item> items;

    /**
     * Construct an empty Database.
     */
    public Database()
    {
        items = new ArrayList<Item>();
    }

    /**
     * Add an item to the database.
     * @param theItem
     */
    public void addItem(Item theItem)
    {
        items.add(theItem);
    }

    /**
     * Gets a list of all currently stored CDs and DVDs to the
     * text terminal.
     * @return 
     */
    public String list()
    {
        String theList = "";
        for (Item item : items )
        {            
             theList = theList + item.getDetails() +"\n";
        }
        
        return theList;
    }
}
