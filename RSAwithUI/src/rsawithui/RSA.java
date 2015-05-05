/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package rsawithui;

/**
 *
 * @author Vanjul
 */
import java.math.BigInteger; 
import java.util.Random;
import java.util.Scanner;
import java.io.*;
import java.net.InetAddress;
import java.net.NetworkInterface;
import java.net.SocketException;
import java.net.UnknownHostException;
import java.security.KeyFactory;
import java.security.KeyPair;
import java.security.KeyPairGenerator;
import java.security.NoSuchAlgorithmException;
import java.security.PrivateKey;
import java.security.PublicKey;
import java.security.spec.InvalidKeySpecException;
import java.security.spec.RSAPrivateCrtKeySpec;
import java.text.SimpleDateFormat;
import java.util.Date;
import javax.crypto.Cipher;
  
public class RSA { 
        
    private static String input;
    private static byte[] cipher;
    private static String plain;
    private static PublicKey pubKey;
    private static PrivateKey priKey;
    public static KeyFactory fact;
    public static RSAPrivateCrtKeySpec kspec;
    public RSAUI ui;
    
    public RSA(RSAUI ui) throws NoSuchAlgorithmException, InvalidKeySpecException, SocketException, UnknownHostException
    {
            this.ui = ui;
            KeyPairGenerator key = KeyPairGenerator.getInstance("RSA");
            key.initialize(512);
            KeyPair keyPair = key.generateKeyPair();
            
            pubKey = keyPair.getPublic();
            priKey = keyPair.getPrivate();
            
            fact = KeyFactory.getInstance("RSA");            
            kspec = fact.getKeySpec(priKey, RSAPrivateCrtKeySpec.class);
                        
            /*cipher = encrypt(input, pubKey);
            plain = decrypt(cipher, priKey);
            
            System.out.println("Ciphertext kamu: "+getCipher());
            System.out.println("Setelah dekripsi: "+getPlain());*/
            ui.writepubkey(getPubKey().toString());
            ui.writeprikey(getPriKey().toString());
            ui.writeexpp(getExponenP().toString());
            ui.writeexpq(getExponenQ().toString());
            ui.writemod(getModulus().toString());
            ui.writepriexp(getPrivateExp().toString());
            ui.writepubexp(getPublicExp().toString());
            /*System.out.println("Public key kamu: "+getPubKey());
            System.out.println("Private key kamu: "+getPriKey());
            System.out.println("Eksponen P: "+getExponenP());
            System.out.println("Eksponen Q: "+getExponenQ());
            System.out.println("Modulus: "+getModulus());
            System.out.println("Private eksponen: "+getPrivateExp());
            System.out.println("Public eksponen: "+getPublicExp());   */
    }
    
        public static void main (String[] args) throws NoSuchAlgorithmException, InvalidKeySpecException
        {
        }    
        
        public static byte[] encrypt(String text, PublicKey pub) {
        byte[] Result = null;
        try 
        {
          final Cipher cipher = Cipher.getInstance("RSA");
          
          cipher.init(Cipher.ENCRYPT_MODE, pub);
          Result = cipher.doFinal(text.getBytes());
        } catch (Exception e) {
          e.printStackTrace();
        }
        return Result;
      }
        
        public static String decrypt(byte[] text, PrivateKey pri) {
        byte[] decrypted = null;
        String Result = null;
        try 
        {          
          final Cipher cipher = Cipher.getInstance("RSA");

          cipher.init(Cipher.DECRYPT_MODE, pri);
          decrypted = cipher.doFinal(text);
          Result = new String(decrypted);

        } catch (Exception ex) {
          ex.printStackTrace();
        }

        return Result;
  }
        
        public static byte[] getCipher()
        {
            return RSA.cipher;
        }
        
        public static String getPlain()
        {
            
            return RSA.plain;
        }
        
        public static PublicKey getPubKey()
        {
            return RSA.pubKey;
        }
        
        public static PrivateKey getPriKey()
        {
            return RSA.priKey;
        }
        public static BigInteger getExponenP()
        {
            return kspec.getPrimeExponentP();
        }
        
        public static BigInteger getExponenQ()
        {
            return kspec.getPrimeExponentQ();
        }
        
        public static BigInteger getModulus()
        {
            return kspec.getModulus();
        }
        
        public static BigInteger getPrivateExp()
        {
            return kspec.getPrivateExponent();
        }
        
        public static BigInteger getPublicExp()
        {
            return kspec.getPublicExponent();
        }
}
