// Generated by Selenium IDE
import org.junit.Test;
import org.junit.Before;
import org.junit.After;
import static org.junit.Assert.*;
import static org.hamcrest.CoreMatchers.is;
import static org.hamcrest.core.IsNot.not;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.remote.RemoteWebDriver;
import org.openqa.selenium.remote.DesiredCapabilities;
import org.openqa.selenium.Dimension;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.interactions.Actions;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;
import org.openqa.selenium.JavascriptExecutor;
import org.openqa.selenium.Alert;
import org.openqa.selenium.Keys;
import java.util.*;
import java.net.MalformedURLException;
import java.net.URL;
public class FullAutomationTest {
  private WebDriver driver;
  private Map<String, Object> vars;
  JavascriptExecutor js;
  @Before
  public void setUp() {
    driver = new ChromeDriver();
    js = (JavascriptExecutor) driver;
    vars = new HashMap<String, Object>();
  }
  @After
  public void tearDown() {
    driver.quit();
  }
  @Test
  public void fullAutomation() {
    driver.get("http://localhost:8080/Assignment/about.php");
    driver.manage().window().setSize(new Dimension(1382, 744));
    driver.findElement(By.cssSelector(".topnav > a:nth-child(1)")).click();
    driver.findElement(By.id("homenev")).click();
    driver.findElement(By.linkText("About")).click();
    driver.findElement(By.linkText("Contact")).click();
    driver.findElement(By.linkText("Join")).click();
    driver.findElement(By.cssSelector(".topnav > a:nth-child(1)")).click();
    driver.findElement(By.id("aboutnev")).click();
    driver.findElement(By.linkText("Contact")).click();
    driver.findElement(By.linkText("Join")).click();
    driver.findElement(By.cssSelector(".topnav > a:nth-child(1)")).click();
    driver.findElement(By.id("contactnev")).click();
    driver.findElement(By.linkText("About")).click();
    driver.findElement(By.linkText("Join")).click();
    driver.findElement(By.cssSelector("img:nth-child(1)")).click();
    driver.findElement(By.id("contactnev")).click();
    driver.findElement(By.linkText("About")).click();
    driver.findElement(By.linkText("Join")).click();
    driver.findElement(By.cssSelector("img:nth-child(1)")).click();
    driver.findElement(By.id("joinnev")).click();
    driver.findElement(By.id("joinnev")).click();
    driver.findElement(By.id("adminnev")).click();
    driver.findElement(By.cssSelector("center > img")).click();
    driver.findElement(By.id("id01")).click();
    driver.findElement(By.cssSelector(".btn1")).click();
    driver.findElement(By.name("pname")).click();
    driver.findElement(By.name("pname")).sendKeys("pamodana");
    driver.findElement(By.name("pserv")).click();
    driver.findElement(By.name("pserv")).sendKeys("programing");
    driver.findElement(By.id("nextBtn")).click();
    driver.findElement(By.name("cname")).click();
    driver.findElement(By.name("cname")).sendKeys("anuradha");
    driver.findElement(By.name("email")).click();
    driver.findElement(By.name("email")).sendKeys("anuradhakarunanayaka97@gmail.com");
    driver.findElement(By.id("nextBtn")).click();
    driver.findElement(By.name("des")).click();
    driver.findElement(By.name("des")).sendKeys("gggh");
    driver.findElement(By.id("nextBtn")).click();
    driver.findElement(By.name("dead")).click();
    driver.findElement(By.name("dead")).sendKeys("31/11/2020");
    driver.findElement(By.name("bud")).click();
    driver.findElement(By.name("bud")).sendKeys("10000");
    driver.findElement(By.id("nextBtn")).click();
    driver.findElement(By.cssSelector("a")).click();
    driver.findElement(By.cssSelector(".topnav img")).click();
    driver.findElement(By.cssSelector(".btn2")).click();
    driver.findElement(By.name("name")).click();
    driver.findElement(By.name("name")).sendKeys("eee");
    driver.findElement(By.name("pw")).click();
    driver.findElement(By.name("pw")).sendKeys("1234");
    driver.findElement(By.name("login")).click();
  }
}
