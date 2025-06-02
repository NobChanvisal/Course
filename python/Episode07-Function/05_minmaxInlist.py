def maximum(*arr):
    if not arr:  
        return None
    max_val = arr[0]  
    for val in arr[1:]:  
        if val > max_val:
            max_val = val
    return max_val

def minimum(*arr):
    if not arr:  
        return None
    min_val = arr[0]  
    for i in range(len(arr)):  
        if arr[i] < min_val:
            min_val = arr[i]
    return min_val

if __name__ == "__main__":
    # Example usage:
    numbers1 = [1, 5, 2, 8, 3]
    numbers2 = [10, -5, 0, 7, 2]
    empty_list = []

    print(f"Maximum of {numbers1}: {maximum(1,5,2,8,3)}")  # Output: 8
    print(f"Minimum of {numbers1}: {minimum(*numbers1)}")  # Output: 1
    print(f"Maximum of {numbers2}: {maximum(*numbers2)}")  # Output: 10
    print(f"Minimum of {numbers2}: {minimum(*numbers2)}")  # Output: -5
    print(f"Maximum of empty list: {maximum(*empty_list)}")  # Output: None
    print(f"Minimum of empty list: {minimum(*empty_list)}")  # Output: None

    
    mixed_list = [1, 2.5, 3, -1.5]
    print(f"Maximum of mixed list: {maximum(*mixed_list)}")
    print(f"Minimum of mixed list: {minimum(*mixed_list)}")
