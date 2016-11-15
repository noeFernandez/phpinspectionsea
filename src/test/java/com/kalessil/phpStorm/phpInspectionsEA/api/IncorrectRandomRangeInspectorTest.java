package com.kalessil.phpStorm.phpInspectionsEA.api;

import com.intellij.testFramework.fixtures.CodeInsightFixtureTestCase;
import com.kalessil.phpStorm.phpInspectionsEA.inspectors.semanticalAnalysis.IncorrectRandomRangeInspector;

public class IncorrectRandomRangeInspectorTest extends CodeInsightFixtureTestCase {
    public void testIfFindsAllPatterns() {
        myFixture.configureByFile("fixtures/incorrect-random-range.php");
        myFixture.enableInspections(IncorrectRandomRangeInspector.class);
        myFixture.testHighlighting(true, false, true);
    }
}