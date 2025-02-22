function insertionSort(unsortedArray) {
  for (var i = 1; i < unsortedArray.length; i++) {
    key = unsortedArray[i];
    for (var j = i - 1; j >= 0; j--) {
      if (unsortedArray[j] > key) {
        unsortedArray[j + 1] = unsortedArray[j];
      } else {
        break;
      }
    }
    unsortedArray[j + 1] = key;
  }
  console.log(unsortedArray);
}

var unsortedArray = [3, 6, 4, 2, 1];
insertionSort(unsortedArray);
