package jp.co.diworks;

public class Test {
	public static void main(String[] args) {
		Person taro = new Person();
		Person zirou = new Person();
		Person hanako = new Person();
		Person renta = new Person();
		Robot aibo = new Robot();
		Robot asimo = new Robot();
		Robot pepper = new Robot();



		taro.name="山田太郎";
		taro.age=20;
		taro.phoneNumber="090-1111-5555";
		taro.address="tokyo";

		zirou.name="木村次郎";
		zirou.age=18;
		zirou.phoneNumber="03-1111-5555";
		zirou.address="nagano";

		hanako.name="鈴木花子";
		hanako.age=16;
		hanako.phoneNumber="03-8888-5555";
		hanako.address="aomori";

		renta.name="佐藤蓮太";
		renta.age=23;
		renta.phoneNumber="03-3988-5555";
		renta.address="Tosimaku";

		System.out.println(taro.name);
		System.out.println(taro.age);
		System.out.println(taro.phoneNumber);
		System.out.println(taro.address);
		taro.talk();
		taro.walk();
		taro.run();

		System.out.println(zirou.name);
		System.out.println(zirou.age);
		System.out.println(zirou.phoneNumber);
		System.out.println(zirou.address);

		System.out.println(hanako.name);
		System.out.println(hanako.age);
		System.out.println(hanako.phoneNumber);
		System.out.println(hanako.address);


		System.out.println(renta.name);
		System.out.println(renta.age);
		System.out.println(renta.phoneNumber);
		System.out.println(renta.address);

		aibo.name="aibo";

		aibo.talk();
		aibo.walk();
		aibo.run();

		asimo.name="asimo";

		asimo.talk();
		asimo.walk();
		asimo.run();

		pepper.name="pepper";;

		pepper.talk();
		pepper.walk();
		pepper.run();

	}

}
