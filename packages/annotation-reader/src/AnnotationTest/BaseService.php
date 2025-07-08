<?php
	
	namespace Quellabs\AnnotationReader\AnnotationTest;
	
	/**
	 * @CacheableTest(ttl=3600)
	 * @AnotherTest(id=100)
	 */
	abstract class BaseService {
		/**
		 * @Test(name="parent_method")
		 */
		public function annotatedMethod() {}
		
		/**
		 * @Test(name="parent_property")
		 */
		public $annotatedProperty;
	}