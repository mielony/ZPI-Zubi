<?

namespace Zubi\DeviceBundle\Tests\Entity;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Validator\ValidatorFactory;

use Zubi\DeviceBundle\Entity\Measurement;

/*****
 *	Nazwa testu 		Opis testu
 *  ------------------------------
 *	testStationId		Test sprawdzający poprawność przypisania id do obiektu
 *  testTimestamp		Test sprawdzający poprawność przypisywania czasu do obiektu
 *	testMeasureTypeId	Test sprawdzający poprawność przypisywania rodzaju pomiaru do obiektu
 *	testValue 			Test sprawdzający poprawność przypisania wartości pomiaru do obiektu
 *
 */
class MeasurementTest extends WebTestCase
{

	private $validator;

	public function __construct() {
		//$this->validator = ValidatorFactoy::buildDefault()->getValidator();
	}

	public function testStationId() {
		$measurement = $this->getMeasurement();
		$this->assertNull($measurement->getStationId());

		$measurement->setStationId(12);
		$this->assertEquals(12, $measurement->getStationId());

		// TODO: check validators

	}

	public function testTimestamp() {
		$measurement = $this->getMeasurement();
		$this->assertNull($measurement->getTimestamp());

		$datetime = new \DateTime();
		$measurement->setTimestamp($datetime);
		$this->assertEquals($datetime, $measurement->getTimestamp());

		// TODO: check validators
	}

	public function testMeasureTypeId() {
		$measurement = $this->getMeasurement();
		$this->assertNull($measurement->getMeasurementType());

		$measurement->setMeasurementType(8);
		$this->assertEquals(8, $measurement->getMeasurementType());

		// TODO: check validators
	}

	public function testValue() {
		$measurement = $this->getMeasurement();
		$this->assertNull($measurement->getValue());

		$measurement->setValue(12);
		$this->assertEquals(12, $measurement->getValue());

		// TODO: check validators
	}



	public function getMeasurement($full = false) {
		if($full) {
			// TODO: return validated measurement
		} else
			return new Measurement();
	}
}
