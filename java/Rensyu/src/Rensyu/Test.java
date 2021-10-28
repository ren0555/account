package Rensyu;

public class Test {
	public static void main(String[] args) {
		Person taro = new Person();
		taro.name="山田太郎";
		taro.age=20;
		taro.phoneNumber="09011112222";
		taro.address="港区2-18";



		Person zirou = new Person();
		zirou.name="木村次郎";
		zirou.age=18;

		Person hanako= new Person();
		hanako.name = "鈴木花子";
		hanako.age = 16;

		Person renta = new Person();
		renta.name = "佐藤蓮太";
		renta.age= 23;

		Robot aibo = new Robot();
		aibo.name="aibo";
		aibo.talk();
		aibo.walk();
		aibo.run();
		Robot asimo = new Robot();
		asimo.name="asimo";
		asimo.talk();
		asimo.walk();
		asimo.run();
		Robot pepper = new Robot();
		pepper.name="pepper";
		pepper.talk();
		pepper.walk();
		pepper.run();

		System.out.println(taro.name);
		System.out.println(taro.age);
		System.out.println(taro.phoneNumber);
		System.out.println(taro.address);
		taro.talk();
		taro.walk();
		taro.run();

		System.out.println(hanako.name);
		System.out.println(hanako.age);
		System.out.println(zirou.name);
		System.out.println(zirou.age);
		System.out.println(renta.name);
		System.out.println(renta.age);
	}


}
