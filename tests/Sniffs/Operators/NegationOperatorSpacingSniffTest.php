<?php declare(strict_types = 1);

namespace SlevomatCodingStandard\Sniffs\Operators;

use SlevomatCodingStandard\Sniffs\TestCase;

class NegationOperatorSpacingSniffTest extends TestCase
{

	public function testNoErrors(): void
	{
		self::assertNoSniffErrorInFile(self::checkFile(__DIR__ . '/data/negationOperatorSpacingNoErrors.php'));
	}

	public function testErrors(): void
	{
		$report = self::checkFile(__DIR__ . '/data/negationOperatorSpacingErrors.php');

		self::assertSame(97, $report->getErrorCount());

		self::assertAllFixedInFile($report);
	}

	public function testRequireSpaceNoErrors(): void
	{
		self::assertNoSniffErrorInFile(
			self::checkFile(__DIR__ . '/data/negationOperatorSpacingRequireSpaceNoErrors.php', ['spacesCount' => 1])
		);
	}

	public function testRequireSpaceErrors(): void
	{
		$report = self::checkFile(
			__DIR__ . '/data/negationOperatorSpacingRequireSpaceErrors.php',
			['spacesCount' => 1]
		);

		self::assertSame(97, $report->getErrorCount());

		self::assertAllFixedInFile($report);
	}

}
