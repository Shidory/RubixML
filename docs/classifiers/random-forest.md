<span style="float:right;"><a href="https://github.com/RubixML/RubixML/blob/master/src/Classifiers/RandomForest.php">[source]</a></span>

# Random Forest
An ensemble classifier that trains an ensemble of Decision Trees ([Classification Trees](classification-tree.md) or [Extra Trees](extra-tree-classifier.md)) on random subsets (*bootstrap* set) of the training data. Predictions are based on the probability scores returned from each tree in the forest, averaged and weighted equally.

> **Note:** The default base tree learner is a fully grown [Classification Tree](classifiers/classification-tree.md).

**Interfaces:** [Estimator](../estimator.md), [Learner](../learner.md), [Probabilistic](../probabilistic.md), [Parallel](../parallel.md), [Ranks Features](../ranks-features.md), [Persistable](../persistable.md)

**Data Type Compatibility:** Categorical, Continuous

## Parameters
| # | Param | Default | Type | Description |
|---|---|---|---|---|
| 1 | base | ClassificationTree | Learner | The base learner. |
| 2 | estimators | 100 | int | The number of learners to train in the ensemble. |
| 3 | ratio | 0.2 | float | The ratio of samples from the training set to randomly subsample to train each base learner. |
| 4 | balanced | false | bool | Should we sample the bootstrap set to compensate for imbalanced class labels? |

## Example
```php
use Rubix\ML\Classifiers\RandomForest;
use Rubix\ML\Classifiers\ClassificationTree;

$estimator = new RandomForest(new ClassificationTree(10), 300, 0.1, true);
```

## Additional Methods
This estimator does not have any additional methods.

### References
>- L. Breiman. (2001). Random Forests.
>- L. Breiman et al. (2005). Extremely Randomized Trees.