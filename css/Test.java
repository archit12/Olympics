class Test{
	Test(){
		System.out.println("Test");
	}
	public void call(){
		System.out.println("in Test");
	}
}

class A extends Test{
	A(){
		System.out.println("A");
	}
	public void call(){
		System.out.println("in A");
	}
}

class C extends Test(){
	C(){
		System.out.println("C");
	}
	public void call(){
		System.out.println("in C");
	}
	public static void main(String[] args) {
		C obj = new C();
		Test t;
		t = obj;
		t.call();
	}
}