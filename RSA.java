package ChatRoom;

/**
 *
 * @author Vanjul
 */

import java.math.BigInteger; 
import java.util.Random;
import java.util.Scanner;
import java.io.*;
import java.security.KeyFactory;
import java.security.KeyPair;
import java.security.KeyPairGenerator;
import java.security.NoSuchAlgorithmException;
import java.security.PrivateKey;
import java.security.PublicKey;
import java.security.spec.InvalidKeySpecException;
import java.security.spec.RSAPrivateCrtKeySpec;
import javax.crypto.Cipher;
  
public class RSA { 
        
    private static String input;
    private static byte[] cipher;
    private static String plain;
    private static PublicKey pubKey;
    private static PrivateKey priKey;
    public static KeyFactory fact;
    public static RSAPrivateCrtKeySpec kspec;
    
    
    public RSA(String in) throws NoSuchAlgorithmException, InvalidKeySpecException
    {
            this.input = in;
            KeyPairGenerator key = KeyPairGenerator.getInstance("RSA");
            key.initialize(512);
            KeyPair keyPair = key.generateKeyPair();
            
            pubKey = keyPair.getPublic();
            priKey = keyPair.getPrivate();
            
            fact = KeyFactory.getInstance("RSA");            
            kspec = fact.getKeySpec(priKey, RSAPrivateCrtKeySpec.class);
            
            
            cipher = encrypt(input, pubKey);
            plain = decrypt(cipher, priKey);
            //System.out.println("Setelah dekripsi (plain): " +plain);
    }
    
        public static void main (String[] args)
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
