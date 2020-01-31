public class Product {

    String name; // name of customer
    String productUID; // database ID
    String description;
    float price = 5.00f; // default to £5.00 or $5.000
    
    public Product(String name) {
    Product iPhone = new Product("iPhone23");
    Product samsungS7 = new Product("Samsung S7");
    Product pixl5 = new Product("Pixl 5");
    Product samsungS9 = new Product("Samsung S9");
    Product iPhone10 = new Product("iphone10");
    
    System.out.println(iPhone);
    System.out.println(samsungS7);  
    System.out.println(pixl5);
    System.out.println(samsungS9);
    System.out.println(iPhone10);
    }
    
    @Override
    public String toString() {
        return "Product{" + "name=" + name + ", productUID=" + productUID + ", description=" + description + ", price=" + price + '}';
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getProductUID() {
        return productUID;
    }

    public void setProductUID(String productUID) {
        this.productUID = productUID;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public float getPrice() {
        return price;
    }

    public void setPrice(float price) {
        this.price = price;
    }
    
    
}
